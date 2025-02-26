<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            "description" => "Treatment that uses chemical solutions to exfoliate and improve the texture of the skin, reducing fine lines and blemishes.",
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
            'subject' => 'Makeup Artistry',
            'class-desc' => 'Learn the art of makeup application for various occasions.',
            'description' => 'This comprehensive course covers professional makeup techniques, including foundation application, contouring, eye makeup, and bridal styling. Students will learn color theory, product selection, and how to adapt makeup for different skin tones and face shapes. Hands-on practice with professional tools will ensure mastery of each technique. ',
            'program' => 'This course provides a complete overview of professional makeup techniques, covering fundamental and advanced skills. Students will start with the basics of skincare and makeup application before progressing to more specialized techniques. The curriculum includes foundation and concealer application, contouring and highlighting, and a variety of eye makeup styles, including smokey eyes and cut crease. Additionally, students will learn about bridal and evening makeup applications, as well as an introduction to special effects and theatrical makeup.',
            'qualification' => 'Upon successful completion, students will receive the Sanctuary Spa Makeup Artistry Certification, which certifies their expertise in professional makeup application. They will also gain practical experience working with industry-standard products, preparing them for careers in beauty, fashion, and entertainment.',
            'method' => 'The course follows a blended learning approach that combines theoretical lessons with live demonstrations and hands-on practice. Students will work on real models, allowing them to refine their techniques with direct guidance from instructors. ',
            'schedule' => 'Monday and Wednesday, 10 AM - 12 PM',
            'supplies' => 'Makeup kit, Brushes, Wipes',
            'image' => '/media/1m.png'
        ],
        [
            'id' => 2,
            'name' => 'Olivia',
            'surname' => 'Johnson',
            'subject' => 'Skincare',
            'class-desc' => 'Understand skincare routines and treatments.',
            'description' => 'This course provides in-depth knowledge of skincare routines, facial treatments, and dermatological conditions. Students will learn how to identify different skin types, recommend treatments, and perform deep cleansing techniques. The course also includes training on product ingredients and their effects on the skin.',
            'program' => 'This course covers the essentials of skincare, from understanding different skin types to advanced treatment techniques. Students will learn about skin anatomy, facial cleansing, exfoliation, hydration, and anti-aging treatments. Additional topics include skincare for acne-prone and sensitive skin, as well as professional consultation techniques for personalized treatment plans.',
            'qualification' => 'Graduates will earn the Sanctuary Spa Skincare Specialist Certificate, which certifies their knowledge of professional skincare treatments and product applications. This qualification prepares students for careers in high-end spas, skincare clinics, and dermatology centers.',
            'method' => 'Students will engage in a combination of theoretical instruction, case study analysis, and hands-on practice. They will have the opportunity to apply treatments in real-life scenarios and simulate client consultations under expert supervision. ',
            'schedule' => 'Tuesday and Thursday, 1 PM - 3 PM',
            'supplies' => 'Skincare products, Towels, Masks',
            'image' => '/media/3m.png'
        ],
        [
            'id' => 3,
            'name' => 'Emma',
            'surname' => 'Williams',
            'subject' => 'Nail Technology',
            'class-desc' => 'Master nail art and techniques with all new gen products.',
            'description' => 'This course is designed to teach students the fundamentals of nail care, from manicures and pedicures to advanced nail art techniques. The course includes gel and acrylic nail applications, as well as nail health and safety regulations.',
            'program' => 'This course is designed to provide students with both foundational and advanced skills in nail care. The curriculum includes nail anatomy, hygiene and safety regulations, classic manicure and pedicure techniques, and advanced gel and acrylic nail applications. Students will also explore modern nail art designs and creative embellishments.',
            'qualification' => 'Upon completion, students will receive the Sanctuary Spa Nail Technician Certification, which validates their ability to perform professional nail treatments and artistic nail designs. This qualification is ideal for those looking to work in salons, spas, or as freelance nail artists.',
            'method' => 'Students will benefit from a hands-on learning experience that includes live demonstrations, real-model practice, and creative workshops dedicated to nail art. Expert instructors will provide personalized feedback to help students perfect their techniques',
            'schedule' => 'Friday, 10 AM - 2 PM',
            'supplies' => 'Nail polish, Tools, Nail art supplies',
            'image' => '/media/2m.png'
        ],
        [
            'id' => 4,
            'name' => 'Ava',
            'surname' => 'Brown',
            'subject' => 'Hair Styling',
            'class-desc' => 'Learn various hair styling techniques.',
            'description' => 'This course focuses on hairstyling techniques, from basic cuts to advanced styling methods. Students will work with various hair types and learn about color theory, styling tools, and salon management basics.',
            'program' => 'This course focuses on professional hairstyling techniques, from basic cutting to advanced styling methods. Students will learn hair anatomy, precision cutting, coloring, and chemical treatments. The course also covers bridal and special occasion hairstyling, along with an introduction to salon management and customer relations.',
            'qualification' => 'Graduates will obtain the Sanctuary Spa Hair Stylist Certification, demonstrating their expertise in professional hairstyling techniques. This certification prepares them for careers in salons, freelance styling, or even launching their own business.',
            'method' => 'Students will receive a mix of theoretical instruction, live demonstrations, and practical training in a simulated salon environment. They will work on real clients to ensure they are fully prepared for real-world hairstyling challenges.',
            'schedule' => 'Saturday, 10 AM - 1 PM',
            'supplies' => 'Hair products, Tools, Accessories',
            'image' => '/media/4m.png'
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

    /// controller e rotta parametrica 
    public function academy()
    {
        return view('academy', ['teachers' => $this->teachers]);
    }

    public function show($id)
    {
        $teacher = collect($this->teachers)->firstWhere('id', $id);
        return view('teacher-show', ['teacher' => $teacher]);
    }


    //form 
    public function booking()
    {
        return view('booking');
    }

    public function submit(Request $request)
    {
        //per testare se ha preso i valori con dd()
        // dd($name, $email, $tel, $user_message);


        // $name = $request->input('name');
        // $email = $request->input('email');
        // $tel = $request->input('tel');
        // $user_message = $request->input('user_message');
        // semplificato
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $user_message = $request->user_message;

        //compatto i dati dell'utente che ha fatto richiesta in una variabile
        $user_data = compact('name', 'email', 'tel', 'user_message');
        //Infine passo a ContactMail $user_data così che venga visualizzato nella construct in FrontController
        // Mail::to($email)->send(new ContactMail($user_data));
        // per perfezionare uso try and catch in caso di server mail down
        try {
            Mail::to($email)->send(new ContactMail($user_data));
        } catch (Exception $error) {
            // return redirect()->back()->with('emailError', 'Your message has not been sent');
            return redirect(route('booking'))->with('emailError', 'Your message has not been sent. Please try again.');
        }

        //redirecting dell'utente
        return redirect(route('booking'))->with('status', 'Your message has been sent');
        //posso concatenare il metodo with per fare un pop-up nella sessione
    }
}
