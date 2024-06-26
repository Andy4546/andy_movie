<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // iStock Random
        $media = Media::create([
            'genre_id' => 1,
            'title' => '',
            'description' => 'This serie is awesome, but completely random',
            'image_url' => 'https://raw.githubusercontent.com/codewithsadee/filmlane/master/assets/images/hero-bg.jpg',
            'trailer_url' => '',
            'type' => 'SERIE', //define type= SERIE|MOVIE
            'seasons_count' => 2, //num of seasons (in the future tihs will be automatic)
            'episodes_count' => 3, //num of episode (in the future tihs will be automatic)
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1373853571/pt/v%C3%ADdeo/person-opens-the-laptop-unrecognizable-woman-working-on-computer.mp4?s=mp4-640x640-is&k=20&c=-TpblY2yek8a1SO1DhNEGj7VJB6UDqo-z-gy8tipkBc=",
            "season" => 1, //define season
            "episode" => 1 //define episode
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1130870974/video/male-and-female-it-engineers-programmer-talking-coding-on-desktop-computers-displays-show.mp4?s=mp4-640x640-is&k=20&c=3Jr-JvLsdOJ6Cw4OX-WOUEpjXwIPIO_kUBz9jVnzNwQ=",
            "season" => 1, //define season
            "episode" => 2 //define episode
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/687157064/video/computer-screen-with-hacking-warning-message-cybercrime-concept-computer-system-under-attack.mp4?s=mp4-640x640-is&k=20&c=RtSZTnakRO61mb6wUh05ELhgzfKNfIVhbmfDnmh0k08=",
            "season" => 5, //define season
            "episode" => 2 //define episode
        ]);

        




        // iStock The Movie
        $media = Media::create([
            'genre_id' => 2,
            'title' => 'The Random Movie - iStock',
            'description' => 'This iStock The Movie movie is awesome, but completely random',
            'image_url' => 'https://wallpaperaccess.com/full/1768278.jpg',
            'trailer_url' => '',
            'type' => 'MOVIE', //define type= SERIE|MOVIE
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/864526000/video/aerial-calm-surface-of-a-lake-in-the-forest-reflecting-the-beautiful-mount-hood-in-the.mp4?s=mp4-640x640-is&k=20&c=FEo1YeJ6ysV5vz62TCXehtl9Di8o0p0nWHPPXbdepFo=",
        ]);




        // Serie Randomized
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Serie Randomized',
            'description' => 'This Serie Randomized Serie is awesome, but completely random',
            'image_url' => 'https://wallpapercave.com/wp/wp5483698.jpg',
            'trailer_url' => '',
            'seasons_count' => 2, //num of seasons (in the future tihs will be automatic)
            'episodes_count' => 4, //num of episode (in the future tihs will be automatic)
            'type' => 'SERIE', //define type= SERIE|MOVIE
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1295687011/pt/v%C3%ADdeo/close-up-view-of-a-calm-young-man-is-opening-his-eyes-and-looking-to-the-camera-at-grey.mp4?s=mp4-640x640-is&k=20&c=GND3enx5y3js-sITXtWWsDsauVMa9jaTmq-7PPMwfMQ=",
            "season" => 1, //define season
            "episode" => 1 //define episode
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1295687011/pt/v%C3%ADdeo/close-up-view-of-a-calm-young-man-is-opening-his-eyes-and-looking-to-the-camera-at-grey.mp4?s=mp4-640x640-is&k=20&c=GND3enx5y3js-sITXtWWsDsauVMa9jaTmq-7PPMwfMQ=",
            "season" => 1, //define season
            "episode" => 2 //define episode
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1295687011/pt/v%C3%ADdeo/close-up-view-of-a-calm-young-man-is-opening-his-eyes-and-looking-to-the-camera-at-grey.mp4?s=mp4-640x640-is&k=20&c=GND3enx5y3js-sITXtWWsDsauVMa9jaTmq-7PPMwfMQ=",
            "season" => 1, //define season
            "episode" => 3 //define episode
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://media.istockphoto.com/id/1295687011/pt/v%C3%ADdeo/close-up-view-of-a-calm-young-man-is-opening-his-eyes-and-looking-to-the-camera-at-grey.mp4?s=mp4-640x640-is&k=20&c=GND3enx5y3js-sITXtWWsDsauVMa9jaTmq-7PPMwfMQ=",
            "season" => 2, //define season
            "episode" => 1 //define episode
        ]);
    }
}
