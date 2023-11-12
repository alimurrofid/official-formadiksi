$("#summernote").summernote({
    tabsize: 2,
    height: 500,
    toolbar: [
        ["style", ["style"]],
        ["fontsize", ["fontsize"]],
        ["font", ["bold", "italic", "underline", "clear"]],
        ["fontname", ["fontname"]],
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["height", ["height"]],
        ["insert", ["picture", "link", "video", "table", "hr"]],
        ["view", ["fullscreen", "codeview", "help"]],
    ],
    fontSizes: [
        "8",
        "9",
        "10",
        "11",
        "12",
        "14",
        "18",
        "24",
        "36",
        "48",
        "64",
        "82",
        "150",
    ],
    callbacks: {
        // callback for pasting text only (no formatting)
        onPaste: function (e) {
            var bufferText = (
                (e.originalEvent || e).clipboardData || window.clipboardData
            ).getData("Text");
            e.preventDefault();
            bufferText = bufferText.replace(/\r?\n/g, "<br>");
            document.execCommand("insertHtml", false, bufferText);
        },
    },
});

const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", function () {
    fetch("/dashboard/article/check-slug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
