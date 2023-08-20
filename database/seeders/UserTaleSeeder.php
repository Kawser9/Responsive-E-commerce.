<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create
        // ([
        //     'name'=>'Admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>bcrypt('123456')

        // ]);
        // User::create
        // ([
        //     'name'=>'Kawser',
        //     'email'=>'kawser@gmail.com',
        //     'password'=>bcrypt('123456')

        // ]);
        // User::create
        // ([
        //     'name'=>'Tushar',
        //     'email'=>'tushar@gmail.com',
        //     'password'=>bcrypt('123456')

        // ]);
        User::create
        ([
            'name'=>'beautisian',
            'email'=>'buahd@gmail.com',
            'password'=>bcrypt('123456')

        ]);
    }
}









// {{-- toaster sms show --}}
//   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

//     <!-- jQuery -->
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

//     <!-- Toastr JavaScript -->
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

//  {{-- toaster sms show --}}

// toaster css {{-- toaster css --}}
//   <style>
//     /* Toastr Styling */
//     .toast {
//         font-size: 16px;
//         line-height: 1.6;
//     }

//     .toast-success {
//         background-color: #51b74b;
//     }

//     .toast-error {
//         background-color: #e74c3c;
//     }

//     .toast-success .toast-title {
//         color: #51b74b;
//     }

//     .toast-error .toast-title {
//         color: #e74c3c;
//     }

//     .toast-success svg {
//         fill: #51b74b;
//     }

//     .toast-error svg {
//         fill: #e74c3c;
//     }
// </style>
// {{-- toaster css --}}
// Laureate
// Laureate Tushar
// java script
// Laureate
// Laureate Tushar
// @if(session()->has('toastr'))
//       $(document).ready(function () {
//           var type = "{{ session('toastr.type') }}";
//           var message = "{{ session('toastr.message') }}";
//           toastr[type](message, type.charAt(0).toUpperCase() + type.slice(1));
//       });
//   @endif
