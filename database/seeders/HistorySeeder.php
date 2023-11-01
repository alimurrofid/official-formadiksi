<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        History::create([
            'title' => 'Sejarah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut elit vel leo vehicula sodales. Nulla ex enim, vehicula at maximus vitae, dignissim vel dui. Curabitur lobortis est mi, vitae ultricies nisi tempus non. Vivamus nunc velit, aliquam vel auctor eu, euismod vel leo. Nam feugiat accumsan lobortis. Fusce eu porta lectus. Sed ac iaculis lorem, id placerat urna. Vivamus id viverra nisl. <br><br>

Nam vulputate et diam vitae malesuada. Donec dapibus vehicula felis, tincidunt tempus sapien tincidunt tempus. Maecenas tempor urna sodales semper viverra. Aenean justo metus, pellentesque sit amet odio vel, iaculis dignissim velit. Donec feugiat dui et faucibus cursus. Donec faucibus lorem ut augue aliquam auctor. In a arcu quam. In porta ipsum diam, id interdum ligula tristique suscipit. Donec tempus mollis tortor sed tristique.<br><br>

Vestibulum id nibh libero. In hac habitasse platea dictumst. Sed rutrum arcu vitae massa commodo facilisis. Morbi facilisis sollicitudin ornare. Etiam quis eros tincidunt, tempor odio nec, malesuada mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed auctor, metus quis interdum auctor, turpis massa condimentum odio, eget hendrerit dolor turpis sit amet nisi. Quisque a arcu massa. Cras non malesuada urna. Phasellus eu risus ac magna tincidunt lobortis. Duis finibus nisl vel eros vulputate lobortis. Sed ornare porttitor accumsan. Vestibulum gravida in ante id volutpat. Sed feugiat sem at mi porta pellentesque. Nullam vel nisi eget mauris commodo finibus in id nisi.<br><br>

Quisque pellentesque turpis erat, id bibendum leo bibendum at. Fusce et venenatis massa, vitae sollicitudin ante. Quisque nibh urna, condimentum nec lacus eu, accumsan tincidunt massa. Mauris lacus nibh, suscipit rutrum dapibus eget, laoreet id lacus. Maecenas eget nisi enim. Praesent a eros at dolor auctor dapibus. Morbi sollicitudin hendrerit pulvinar. Vestibulum eu purus vel felis ornare vulputate vitae ut felis. Nulla ac arcu neque.',
        ]);
    }
}
