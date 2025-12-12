<x-layouts.app>
    <h2>{{ $page->title }}</h2>

    @if ($page->content)
        <pre>{{ json_encode($page->content, JSON_PRETTY_PRINT) }}</pre>
    @else
        <p>No content yet.</p>
    @endif
</x-layouts.app>
