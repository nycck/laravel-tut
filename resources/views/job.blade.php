<x-layout>
<x-slot:heading>
    Job Details
</x-slot:heading>

<h2>{{ $job['title'] }}</h2>
<p>Salary: {{ $job['salary'] }}</p>
<a href="/jobs" class="text-blue-500 hover:underline">Back to Job Listings</a>
</x-layout>