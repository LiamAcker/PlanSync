@extends('core.sidebar')

@section('content')
<div class="max-w-md mx-auto p-4 m-5 border border-red-300 rounded-md">
    <h1 class="text-3xl font-bold mb-4">Add Reminder</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class=".text-danger">{{ $error }}</li>
                @endforeach
            </ul>
            <br>
        </div>
      @endif
      @if (session('success'))
        <div id="success-message" class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        
    <form method="POST" action="{{route('post-reminder')}}">
        @csrf
        <div class="d-flex flex-column mb-4">
            <label for="reminder-name" class="block text-sm font-medium text-zinc-700">Reminder Name</label>
            <input type="text" id="reminder-name" name="reminder_name" class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2" required/>
        </div>

        <div class="d-flex flex-column mb-4">
            <label for="description" class="block text-sm font-medium text-zinc-700">Description</label>
            <textarea id="description" name="description" rows="3" class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2" required></textarea>
        </div>
        
        <!-- <div class="d-flex flex-row mb-4">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary">Add File</button>
                <button type="button" class="btn btn-primary">Add Images</button>
            </div>
        </div> -->

        <div class="d-flex flex-column mb-4">
            <label for="datetime" class="block text-sm font-medium text-zinc-700">Datetime</label>
            <input type="datetime-local" name="datetime" id="datetime" class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2" required>
        </div>

        <div class="d-flex flex-column mb-4">
            <label for="repeat_category" class="block text-sm font-medium text-zinc-700">Repeat Category</label>
            <select id="repeat_category" name="repeat_category" class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2" required>
                <option value="Yearly">Yearly</option>
                <option value="Monthly">Monthly</option>
                <option value="Daily">Daily</option>
                <option value="No Repeat" selected>No Repeat</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-4">
            <label for="priority_category">Priority Category</label>
            <select id="priority_category" name="priority_category" class="mt-1 block w-full border border-zinc-300 rounded-md shadow-sm p-2" required>
                <option value="Low">Low</option>
                <option value="Medium" selected>Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <div class="flex space-x-4">
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Add Reminder</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            alert('Reminder added successfully!');
        }
    });
</script>
@endsection