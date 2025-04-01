@props(['color', 'bgColor' => 'white'])

<div class="card card-text-{{ $color }} card-bg-{{ $bgColor }}">
  <div class="card-header">{{ $title }}</div>
  {{ $slot }}
  <div class="card-footer">{{ $footer }}</div>
</div>