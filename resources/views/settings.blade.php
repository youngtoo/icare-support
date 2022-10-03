<x-theme>

    <x-slot:pageTitle>Settings</x-slot>

   @if (!isset($option))

    <!-- Ticket Statuses -->
    <div class="widget-section p-3 bg-light rounded">
        <h5>Tickets</h5>
        <p>This widget should be able to show ticket statuses.</p>
        <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Go To Tickets</button>
    </div>

    <div class="widget-section p-3 bg-light rounded">
        <h5>Ticket Components</h5>
        <p>This allows you to manage system components</p>
        <form action="/settings" method="GET">
            <input type="hidden" name="option" value="components">
            <input type="submit" class="btn btn-sm btn-outline-dark" value="Ticket Components"></form>
    </div>
       
   @else

    @if ($option === 'components')
        <p> Components </p>
    @endif
       
   @endif

</x-theme>