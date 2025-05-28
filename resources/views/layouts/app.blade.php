@props(['title' => '', 'bodyClass' => null, 'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>
    <x-layouts.header/>    
    {{ $slot }}    
    {{-- <footer>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
    </footer> --}}
</x-base-layout>
