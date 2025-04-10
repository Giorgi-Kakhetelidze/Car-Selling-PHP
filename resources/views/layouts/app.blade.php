@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title>
    <x-layouts.header/>    
    {{ $slot }}    
    {{-- <footer>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
    </footer> --}}
</x-base-layout>
