<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name' => 'Выставка «Сальвадор Дали & Пабло Пикассо»',
            'price' => '1000 рублей',
            'date' => 'В 13:00, 15:00, 17:00 и 19:00 в будние дни и каждый час с 12:00 до 20:00 в выходные дни',
            'comment' => 'Нужна регистрация на мероприятие',
            'link' => 'https://dalipicasso.com/events/gruppovaya-obzornaya/?utm_source=kudago&utm_medium=anons&utm_campaign=dali_kudago&erid=Pb3XmBtzt166uAb2TXnb2KFiCmMmm1xwMrW9L9e',
            'type' => 'want',
            'user_id' => '1',
        ]);

        Place::create([
            'name' => 'Пятьсот метров длины и пятьсот лет истории. Улица Варварка',
            'price' => 'бесплатно',
            'date' => '14.02.2023 - 12:00',
            'comment' => 'Место встречи - ст. метро "Китай город", выходы № 11-14 (в сторону парка Зарядье), в подземном переходе сразу после стеклянных дверей у карты.',
            'link' => 'https://dalipicasso.com/events/gruppovaya-obzornaya/?utm_source=kudago&utm_medium=anons&utm_campaign=dali_kudago&erid=Pb3XmBtzt166uAb2TXnb2KFiCmMmm1xwMrW9L9e',
            'type' => 'want',
            'user_id' => '1',
        ]);

        Place::create([
            'name' => 'Виртуальная инсталляция "YOLO: You Only Live Once"',
            'price' => '800 р, по пушкинской - бесплатно',
            'date' => '14.02.2023',
            'comment' => 'Проект рассчитан на 1-2 человека за сеанс, для взаимодействия в виртуальной реальности необходимо 2 человека. Сеансы проходят каждый час.',
            'link' => 'https://centermars.ru/projects/YOLO/',
            'type' => 'want',
            'user_id' => '1',
        ]);
    }
}
