@extends('core.sidebar')

@section('content')
<h1>Add Reminder</h1>
    <form method="POST" action="{{ route('post-reminder') }}">
        @csrf
        <div>
            <label for="title">Reminder Name</label>
            <input id="title" type="text" name="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="repeat_category">Repeat Category</label>
            <select id="repeat_category" name="repeat_category" required>
                <option value="Year">Year</option>
                <option value="Month">Month</option>
                <option value="Day">Day</option>
            </select>
        </div>

        <div>
            <label for="priority_category">Priority Category</label>
            <select id="priority_category" name="priority_category" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <div>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Add Reminder</buttonutton>
        </div>
    </form>
@endsection
<body>


</body>