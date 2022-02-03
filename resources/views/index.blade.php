@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <title>Album example · Bootstrap</title>

        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">




        <main>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="font-weight-light">Dobrodosli na iznajmljivanje sala</h1>
                        <p class="lead text-muted">Izaberite jednu od najbolje opremljenih sala u Srbiji</p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="halls-page">
                        {{-- HallComponent --}}
                    </div>
                </div>
            </div>

        </main>
@endsection
