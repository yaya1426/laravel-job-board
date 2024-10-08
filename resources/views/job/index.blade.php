<div>
    <h1>Job Board</h1>
    <h3>My name is: {{ $name }}</h3>

    @foreach ($jobs as $job)
        <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>
    @endforeach
</div>
