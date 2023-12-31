<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
        <link href="{{ asset('storage/logo.jpg') }}" rel="icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body{background-color: #4e98b2;}
        .containerSection {
            display: flex;
            flex-direction: row;
            align-items: center; /* Center vertically */
            justify-content: space-between; /* Spread elements evenly horizontally */
            padding: 20px; /* Optional spacing */
        }

        .left img {
            max-width: 100%; /* Ensure the image doesn't exceed the container width */
            height: auto; /* Maintain aspect ratio */
            margin-right: 10px; /* Optional spacing between image and text */
        }

        .right p {
            font-size: 100px; /* Adjust font size as needed */
            opacity: 1;
        }

        .start-button {
            background-color:#fff ; /* Change to your desired color */
            color: #007bff; /* Text color */
            padding: 10px 20px; /* Adjust padding as needed */
            font-size: 18px; /* Adjust font size as needed */
            border: none; /* Remove border */
            cursor: pointer;
            border-radius: 5px; /* Add rounded corners */
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;        }

        .start-button:hover {
            background-color: #e1e3e7; /* Change to your desired hover color */
        }
        .text {
            padding:0px 350px;
        }
        @media (max-width: 768px) {
            .text {
                padding:0px;
            }
        }
        .services {
            background-color: #f5f5f5; /* Background color for the section */
            padding: 40px 0; /* Adjust padding as needed */
        }

        .services .containerSection {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px; /* Adjust maximum width as needed */
            margin: 0 auto;
        }

        .service {
            width: calc(33.33% - 20px); /* Adjust width and spacing as needed */
            background-color: #fff; /* Background color for service boxes */
            padding: 20px;
            text-align: center;
            margin-bottom: 20px; /* Adjust spacing between service boxes */
            border-radius: 5px; /* Rounded corners for service boxes */
        }

        .service img {
            max-width: 100%; /* Ensure images fit within their containers */
        }

        .service h3 {
            font-size: 20px;
            margin-top: 10px;
        }

        .service p {
            font-size: 16px;
            color: #666;
        }

        /* Media Query for Responsive Design */
        @media (max-width: 768px) {
            h2{padding:0px;}
            .service {
                width: calc(50% - 20px); /* Two services per row on smaller screens */
            }
        }

        @media (max-width: 576px) {
            h2{padding:0px;}
            .service {
                width: 100%; /* One service per row on mobile screens */
            }
        }
        /*about us*/

        .about-us {
            background-color: #779dc5; /* Background color for the section */
            padding: 60px 0; /* Adjust padding as needed */
        }

        .about-us .containerSection {
            display: flex;
            flex-direction: column; /* Stack content vertically on small screens */
            align-items: center; /* Center content horizontally */
            text-align: center; /* Center-align text */
            max-width: 1200px; /* Adjust maximum width as needed */
            margin: 0 auto;
            color:whitesmoke;
        }

        .about-us h2 {
            font-size: 28px; /* Adjust font size as needed */
            margin-bottom: 20px; /* Add spacing below the heading */
        }

        .about-us p {
            font-size: 18px; /* Adjust font size as needed */
            color: white;
            line-height: 1.6; /* Adjust line height for readability */
        }

        .about-us .right img {
            max-width: 100%; /* Ensure the image fits within its container */
            height: auto; /* Maintain aspect ratio */
            margin-top: 20px; /* Add spacing between text and image */
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        /* Media Query for Responsive Design */
        @media (min-width: 768px) {
            .about-us .containerSection {
                flex-direction: row; /* Side-by-side arrangement on larger screens */
                justify-content: space-between; /* Distribute content evenly horizontally */
                align-items: flex-start; /* Align content to the top */
            }

            .about-us .left {
                flex: 1; /* Allow the left side to grow to take available space */
                text-align: center;
                margin-right: 40px; /* Add spacing between text and image */
            }

            .about-us .right {
                flex: 1; /* Allow the right side to grow to take available space */
            }
        }

        .why-work-with-us {
            background-color: #ffffff; /* Background color for the section */
            padding: 60px 0; /* Adjust padding as needed */
        }

        .why-work-with-us .containerSection {
            display: flex;
            flex-wrap: wrap; /* Allow reasons to wrap on smaller screens */
            justify-content: space-between; /* Distribute reasons evenly horizontally */
            max-width: 1200px; /* Adjust maximum width as needed */
            margin: 0 auto;
        }

        .why-work-with-us h2 {
            font-size: 28px; /* Adjust font size as needed */
            margin-bottom: 50px; /* Add spacing below the heading */
            text-align: center; /* Center-align the heading */
            color:blue
        }

        .reason {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex-basis: calc(25% - 20px);

            /*background-color: #f9f9f9; !* Background color for reason boxes *!*/
            text-align: center;
            margin-bottom: 20px; /* Adjust spacing between reason boxes */
            /*border-radius: 5px; !* Rounded corners for reason boxes *!*/
            /*box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;*/
        }

        .reason img {
            max-width: 100%; /* Ensure images fit within their containers */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 10px; /* Add spacing below the image */
        }

        .reason h3 {
            font-size: 20px;
            margin-top: 10px;
        }

        .reason p {
            font-size: 16px;
            color: #666;

        }

        /* Media Query for Responsive Design */
        @media (max-width: 768px) {
            .reason {
                flex-basis: calc(100% - 20px); /* One reason per row on smaller screens */
            }
        }

        .icon{
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .footer-distributed{
            background: #779dc5;
            /*background-color:#49a4d6;*/
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 55px 50px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left{
            width: 40%;
        }

        /* The company logo */

        .footer-distributed h3{
            color:  #ffffff;
            font: normal 36px 'Open Sans', cursive;
            margin: 0;
        }

        .footer-distributed h3 span{
            color:  blue;
        }

        /* Footer links */

        .footer-distributed .footer-links{
            color:  #ffffff;
            margin: 20px 0 12px;
            padding: 0;
        }

        .footer-distributed .footer-links a{
            display:inline-block;
            line-height: 1.8;
            font-weight:400;
            text-decoration: none;
            color:  inherit;
        }

        .footer-distributed .footer-company-name{
            color:  #222;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */
        footer{
            padding-top:100px;
        }
        .footer-distributed .footer-center{
            width: 35%;
        }

        .footer-distributed .footer-center i{
            background-color:  #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope{
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p{
            display: inline-block;
            color: #ffffff;
            font-weight:400;
            vertical-align: middle;
            margin:0;
        }

        .footer-distributed .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }

        .footer-distributed .footer-center p a{
            color:  blue;
            text-decoration: none;;
        }

        .footer-distributed .footer-links a:before {
            content: "|";
            font-weight:300;
            font-size: 20px;
            left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
            content: none;
        }

        /* Footer Right */

        .footer-distributed .footer-right{
            width: 20%;
        }

        .footer-distributed .footer-company-about{
            line-height: 20px;
            color: #444848;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span{
            display: block;
            color:  #ffffff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons{
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* If you don't want the footer to be responsive, remove these media queries */

        @media (max-width: 880px) {

            .footer-distributed{
                font: bold 14px sans-serif;
            }

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right{
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i{
                margin-left: 0;
            }

        }
        /****contact us**/
        /* Reset some default styles */
        body, h1, h2, p, form {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            background-color: #f4f4f4;
        }

        header {
            color: blue;
            text-align: center;
            padding: 20px 0;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            max-width: 1000px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px 20px 20px 20px;
        }

        .contact-info, .contact-form {
            padding: 20px;
        }

        .contact-info h2, .contact-form h2 {
            color: blue;
        }

        .contact-info p {
            color: #777;
            margin-bottom: 10px;
        }

        .contact-form form {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 20px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form textarea {
            grid-column: span 1;
        }

        .contact-form button {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Media queries for responsiveness */
        @media (min-width: 768px) {
            .contact-container {
                flex-direction: row;
            }

            .contact-info, .contact-form {
                flex: 1;
            }
        }



        .underlined {
            /*   background: red; */
            position: relative;
        }

        .underline-mask:after {
            content: '';
            position: absolute;
            top: 95%;
            width: 150%;
            aspect-ratio: 3 / 1;
            left: 50%;
            transform: translate(-50%, 0);
            border-radius: 50%;
            border: 6px solid hsl(280 80% 50%);
            /* Use a conic gradient mask to hide and show the bits you want */
            --spread: 140deg;
            --start: 290deg;
            mask: conic-gradient(from var(--start), white 0 var(--spread), transparent var(--spread));
        }


        .underline-overflow {
            display: inline-block;
            /* A little extra padding and overflow hidden   */
            overflow: hidden;
            padding-bottom: clamp(1rem, 2vmin, 2rem);
        }
        .underline-overflow:after {
            content: '';
            position: absolute;
            top: 100%;
            height: 150%;
            aspect-ratio: 2.5 / 1;
            left: 50%;
            transform: translate(-50%, -10%);
            border-radius: 50%;
            border: 6px solid hsl(10 80% 50%);
        }

        .underline-clip:after {
            content: '';
            position: absolute;
            top: 95%;
            width: 140%;
            aspect-ratio: 3 / 1;
            left: 50%;
            transform: translate(-50%, 0);
            border-radius: 50%;
            border: 6px solid hsl(223, 76%, 43%);
            /* Use a clip-path to hide and show the bits you want */
            clip-path: polygon(0 0, 50% 50%, 100% 0);
        }

        /* Hide the image on phone screens */
        @media (max-width: 768px) {
            .image-on-desktop {
                display: none;
            }
        }

        /********************/


        /* Main content container styles */
        .request_container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        select, textarea {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1rem;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #1b4ac2;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 1rem;
            cursor: pointer;
        }




        /* Style for job listings */
        .job-listings {
            display: grid;
            gap: 20px;
        }

        .job {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .job h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .job-level {
            font-weight: bold;
            color: #007BFF;
            margin: 0;
        }

        .job-description {
            margin-top: 10px;
        }
/***job details page*
/* Add custom styles here */
        .job-details {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
        }

        .job-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .job-level {
            font-size: 18px;
            color: #666;
        }

        .job-description p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-top: 15px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .job-details {
                padding: 10px;
            }
            .job-title {
                font-size: 20px;
            }
            .job-level {
                font-size: 16px;
            }
            .job-description p {
                font-size: 14px;
            }
        }

        a {
            text-decoration: none;
        }

        .job-card:hover {
            transform: scale(1.05); /* Increase the card size on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
        }
        .job-small {
            color:blue;
        }
/****/
        .card-title {
            color: #1c1b1b;
        }
        .card-text{
            color: #1c1b1b;
        }

        /***team**/
        .our-team{
            text-align: center;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease 0s;
        }
        .our-team .pic{
            background: #779dc5;
            transition: all 0.3s ease 0s;
        }
        .our-team:hover .pic{
            padding: 10px;
            border-radius: 10px;
            transform: scale(0.5) translateY(-30%);
        }
        .our-team .pic img{
            width: 100%;
            height: 300px;
        }
        .our-team .team-content{
            width: 100%;
            padding: 7px 15px;
            background: #779dc5;
            position: absolute;
            bottom: -30%;
            right: 0;
            opacity: 0;
            transition: all 0.3s ease 0s;
        }
        .our-team:hover .team-content{
            opacity: 1;
            bottom: -10px;
        }
        .our-team .title{
            font-size: 22px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 5px 0;
        }
        .our-team .post{
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            font-style: italic;
            text-transform: capitalize;
            margin: 0 0 5px 0;
        }
        .our-team .social{
            padding: 0;
            margin: 0;
            list-style: none;
            transition: all 0.35s ease 0s;
        }
        .our-team .social li{
            display: inline-block;
            margin: 0 5px 0 0;
        }
        .our-team .social li a{
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 15px 0 15px 0;
            font-size: 20px;
            color: #fff;
            overflow: hidden;
            z-index: 1;
            position: relative;
            transition: all 0.35s ease 0s;
        }
        .our-team .social li a:before{
            content: "";
            width: 100%;
            height: 100%;
            background: #779dc5;
            position: absolute;
            top: 0;
            left: -100%;
            z-index: -1;
            transition: all 0.3s ease-in-out 0s;
        }
        .our-team .social li a:hover:before{ left: 0; }
        @media only screen and (max-width: 990px){
            .our-team{ margin-bottom: 30px; }
        }

        /**bg videos**/
        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: rgba(147, 145, 145, 0.14); /* Semi-transparent background */
            color: #1b4ac2; /* Text color */
            padding: 20px;
        }

/*!*cards*!*/
        .scard-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            margin: 20px;
        }

        .scard {
            width: calc(33.33% - 40px); /* 3 cards per row with increased spacing */
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }

        .scard:hover {
            transform: scale(1.05); /* Scale up the card on hover */
        }

        .scard-icon {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .scard-content {
            padding: 10px;
        }

        .scard h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .scard p {
            font-size: 16px;
            color: #666;
        }

        /* Ensure equal height for cards in the same row */
        @media (min-width: 768px) {
            .scard {
                height: auto;
            }
        }


.centered-h1 {
    text-align: center; /* Center the text horizontally */
        padding: 20px 0; /* Add padding top and bottom for spacing */
        font-size: 28px; /* Adjust the font size as needed */
        color: #333; /* Set the text color */
        /* Additional styling ideas */
        /* font-weight: bold; */ /* Optionally make the text bold */
        /* background-color: #f5f5f5; */ /* Optionally add a background color */
        }

/*section*/
        /* Style the services container */
        .services {
            /*max-width: 1200px;*/
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Style individual service items */
        .service {
            text-align: center;
            margin: 10px;
            width: 360px; /* Adjust this value as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Add hover effect */
        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Style service icons (assuming you're using FontAwesome icons) */
        .service i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        /* Style service titles and descriptions */
        .service h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 14px;
        }
/*our clients*/
        /* Style the client list container */
        .client-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Style individual client cards */
        .client-card {
            margin: 50px;
            max-width: 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .client-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Style client images */
        .client-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }

        /* Style client information */
        .client-info {
            padding: 20px;
        }

        .client-info h3 {
            font-size: 18px;
            margin: 0;
        }

        /* Style social media icons */
        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #007bff; /* Change to your preferred hover color */
        }

        /*clients*/


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .clients-section {
            text-align: center;
            padding: 50px 0;
        }

        .clients-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        .client-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .client-item {
            flex: 0 0 calc(20% - 20px);
            /*margin: 20px;*/
            /*padding: 20px;*/
            /*background-color: #fff;*/
            /*box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);*/
            /*border-radius: 10px;*/
            /*transition: transform 0.2s ease-in-out;*/
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .client-item:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        .client-image {
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin: 0 auto 15px;
            background-color: #f0f0f0;
        }

        .client-image img {
            max-width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .client-name {
            font-size: 20px;
            color: #555;
            font-weight: bold;
        }






    </style>


</head>
<body>
<div id="app">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="../" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            {{--                <h2 class="m-0 text-primary">Fraij Ajency</h2>--}}
            <img src="{{ asset('storage/logo.jpg') }}" alt="logo" width="60px" height="60px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="./" class="nav-item nav-link active">Home</a>
                <a href="./#services" class="nav-item nav-link">Services</a>
                <a href="./#about" class="nav-item nav-link">About</a>
                <a href="./request" class="nav-item nav-link">Request a Service</a>
                <a href="./contact" class="nav-item nav-link">Contact</a>
                <a href="../jobs" class="nav-item nav-link">Jobs</a>

            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

                {{--                    <div class="nav-item dropdown">--}}
                {{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
                {{--                        <div class="dropdown-menu fade-up m-0">--}}
                {{--                            <a href="feature.html" class="dropdown-item">Feature</a>--}}
                {{--                            <a href="quote.html" class="dropdown-item">Free Quote</a>--}}
                {{--                            <a href="team.html" class="dropdown-item">Our Team</a>--}}
                {{--                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>--}}
                {{--                            <a href="404.html" class="dropdown-item">404 Page</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>



<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Fraij<span>Ajency</span></h3>

        <p class="footer-links">
            <a href="#" class="link-1">Home</a>

            <a href="#">About</a>

            <a href="#">services</a>

            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Fraij Agency @ 2023</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Salem abu Hdaib compaound</span> Amman, Jordan</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>0791107772</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">sales@fraij-agency.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            At Fraij Ajency, we're more than just a digital agency. We're a team of passionate individuals dedicated to transforming ideas into exceptional digital experiences. With creativity at our core and innovation as our compass, we craft digital solutions that drive success for our clients.
        </p>

        {{--        <div class="footer-icons">--}}

        {{--            <a href="#"><i class="fa-facebook-f"></i></a>--}}
        {{--            <a href="#"><i class="fa-instagram"></i></a>--}}
        {{--            <a href="#"><i class="fa linkedin-in"></i></a>--}}

        {{--        </div>--}}

    </div>

</footer>

</html>
