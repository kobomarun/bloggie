<?php

namespace App\Http\Controllers\Website;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('rating', 'desc')->paginate(20);

        return view('website.testimonial.index')->with([
            'testimonials' => $testimonials
        ]);
    }
}