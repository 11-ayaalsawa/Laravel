@extends('layout.app')

@section('content');
@section('title','about');
<!-- ============================================================ -->
<section class="section-a">
      <div class="container">
        <div>
          <h1>Our Candy Store</h1>
          <p>
          If you love Candy, then Candy Store was made for you. Home to the largest selection of Candy in the United States, it offers almost 160 different types of the chewy candy from 12 countries. There’s even a whole section of “salty” Candy.
          </p>
     
        </div>
        <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/156240014/original/8cf6d1fd32cd111010837e479a3698f3c5f8d6bb/make-an-amazing-local-candy-shop-logo.png" alt="" />
      </div>
    </section>

    <!-- Large Text -->
    <section id="about" class="section-b">
      <div class="overlay">
        <div class="section-b-inner py-5">
          <h3 class="text-2"><?php
          foreach ($names as $item) {
       
          print_r($item);
             echo "<br>";
    
          }
          ?>
       </h3>
          <h2 class="text-5 mt-1">Gelato, candy and chocolate, oh my! </h2>
          <p class="mt-1">
          You’ve never seen candy like you’ll see at our store. They have all sorts of “world’s largest” boxes of candy—no matter what type you want, they’ve likely got it. Don’t miss the over-the-top novelty candy, either!
          </p>
        </div>
      </div>
    </section> 
    <!-- ================================================================ -->
@endsection