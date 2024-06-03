@extends('layouts.app')

@section('content')



<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
                <h3 class="text-black">create the circuit</h3>
                <a href="{{ route('circuit.create') }}">create</a>


                    <h3 class="text-black">create account</h3>
                    <a href="{{ route('register_user.index') }}">create</a>

                </div>
                <h3 class="text-black">add buildings</h3>
                <a href="{{ route('building.create') }}">add</a>

                <h3 class="text-black">all buildings</h3>
                <a href="{{ route('building.index') }}">show</a>

                <h3 class="text-black">all circuits</h3>
                <a href="{{ route('circuit.index') }}">show</a>

            </div>
        </div>
    </div>
</div>
    
@endsection