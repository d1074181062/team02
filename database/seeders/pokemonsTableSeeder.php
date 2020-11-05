<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class pokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function string($length=6)
    {

        $characters='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charleght=strlen($characters);
      $randstr='';
      for($i=0;$i<$length;$i++){
          $randstr .=$characters[rand(0,$charleght-1)];
      }
        return $randstr;
    }
    public function name()
    {
    $firstname=$this->string(rand(2,15));
    $firstname=strtolower($firstname);
    $firstname=ucfirst($firstname)  ;
    $lastname=$this->string(rand(2,15));
        $lastname=strtolower($lastname);
        $lastname=ucfirst($lastname)  ;
    $name=$firstname." ". $lastname;
    return $name;
    }
    public function growing()
    {
        $growing=['是','否'];
        return $growing[rand(0,count($growing)-1)];
    }
    public function group()
    {
        $group=['關都','城都','阿羅拉','卡洛斯','神奧','豐緣','合眾','七之島','鎧島'];
        return $group[rand(0,count($group)-1)];
    }
    public function place()
    {
        $place=['山脈和活火山','無固定場所','淡水池塘和湖泊','空間狹縫','潮濕環境','海洋','草原','森林','雷雲','沙漠'
            ,'城鎮郊區','懸崖','雪山','陰暗處','毀壞的世界','臭氧層','夢幻大地','洞窟'];
        return $place[rand(0,count($place)-1)];
    }
    public function run()
    {
        for($i=0;$i<50;$i++)
        {
            $name=$this->name();
            $growing =$this->growing();
            $group=$this->group();
            $place=$this->place();
            $datetime=Carbon::now()->subMinutes(rand(1,55));


        DB::table('pokemons')->insert([
           'name'=>$name,
            'team_num'=>rand(1,15),
            'height'=>rand(1,10),
            'weight'=>rand(1,500),
            'growing'=>$growing,
            'group'=>$group,
            'place'=>$place,
            'created_at'=>$datetime,
        'updated_at'=>$datetime
        ]);
        }
    }
}
