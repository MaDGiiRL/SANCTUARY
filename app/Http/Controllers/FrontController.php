<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public $services = [
        [
            "id" => 1,
            "name" => "Rejuvenating Facial",
            "description" => "A revitalizing facial treatment designed to cleanse, exfoliate, and hydrate the skin, leaving it glowing and refreshed.",
            "target" => "Individuals seeking to improve skin appearance and hydration.",
            "image" => "/media/services/Rejuvenating Facial.png",
        ],
        [
            "id" => 2,
            "name" => "Deep Tissue Massage",
            "description" => "A therapeutic massage that targets deeper layers of muscle and connective tissue to relieve chronic pain and tension.",
            "target" => "Those with muscle soreness or chronic pain issues.",
            "image" => "/media/services/Deep Tissue Massage.png",
        ],
        [
            "id" => 3,
            "name" => "Aromatherapy Massage",
            "description" => "A relaxing massage infused with essential oils to promote relaxation and emotional well-being.",
            "target" => "Anyone looking for stress relief and relaxation.",
            "image" => "/media/services/Aromatherapy Massage.png",
        ],
        [
            "id" => 4,
            "name" => "Hydrating Body Wrap",
            "description" => "A luxurious treatment that deeply hydrates the skin using nourishing ingredients to leave it soft and supple.",
            "target" => "Individuals with dry or dehydrated skin.",
            "image" => "/media/services/Hydrating Body Wrap.png",
        ],
        [
            "id" => 5,
            "name" => "Exfoliating Scrub",
            "description" => "A body scrub that exfoliates dead skin cells, revealing smoother, brighter skin underneath.",
            "target" => "Those wanting to rejuvenate their skin and improve texture.",
            "image" => "/media/services/Exfoliating Scrub.png",
        ],
        [
            "id" => 6,
            "name" => "Brazilian Waxing",
            "description" => "A professional waxing service that removes unwanted hair for smooth, long-lasting results.",
            "target" => "Individuals seeking a clean and hair-free bikini area.",
            "image" => "/media/services/Brazilian Waxing.png",
        ],
        [
            "id" => 7,
            "name" => "Chemical Peel",
            "description" => "A skin treatment that uses chemical solutions to exfoliate and improve the texture of the skin, reducing fine lines and blemishes.",
            "target" => "Those looking to address skin imperfections and signs of aging.",
            "image" => "/media/services/Chemical Peel.png",
        ],
        [
            "id" => 8,
            "name" => "Microdermabrasion",
            "description" => "A non-invasive procedure that exfoliates the skin using fine crystals, promoting cell turnover and revealing a fresh complexion.",
            "target" => "Individuals wanting to enhance skin texture and clarity.",
            "image" => "/media/services/Microdermabrasion.png",
        ]
    ];


    public $teachers = [
        [
            'id' => 1,
            'name' => 'Sophia',
            'surname' => 'Smith',
            'age' => 30,
            'subject' => 'Makeup Artistry',
            'description' => 'Learn the art of makeup application for various occasions.',
            'schedule' => 'Monday and Wednesday, 10 AM - 12 PM',
            'supplies' => 'Makeup kit, Brushes, Wipes'
        ],
        [
            'id' => 2,
            'name' => 'Olivia',
            'surname' => 'Johnson',
            'age' => 28,
            'subject' => 'Skincare',
            'description' => 'Understand skincare routines and treatments.',
            'schedule' => 'Tuesday and Thursday, 1 PM - 3 PM',
            'supplies' => 'Skincare products, Towels, Masks'
        ],
        [
            'id' => 3,
            'name' => 'Emma',
            'surname' => 'Williams',
            'age' => 35,
            'subject' => 'Nail Technology',
            'description' => 'Master nail art and techniques with all new gen products.',
            'schedule' => 'Friday, 10 AM - 2 PM',
            'supplies' => 'Nail polish, Tools, Nail art supplies'
        ],
        [
            'id' => 4,
            'name' => 'Ava',
            'surname' => 'Brown',
            'age' => 26,
            'subject' => 'Hair Styling',
            'description' => 'Learn various hair styling techniques.',
            'schedule' => 'Saturday, 10 AM - 1 PM',
            'supplies' => 'Hair products, Tools, Accessories'
        ],
    ];
    


    public function home()
    {
        return view('home');
    }


    public function services()
    {
        return view('services', ['services' => $this->services]);
    }


    public function academy()
    {
        return view('academy', ['teachers' => $this->teachers]);
    }

    public function show($id)
    {
        $teacher = collect($this->teachers)->firstWhere('id', $id);
        return view('teacher-show', ['teacher' => $teacher]);
    }
}
