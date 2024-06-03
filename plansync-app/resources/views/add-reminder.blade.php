<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reminder</title>
    <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-ok {
            background-color: #3D9140;
        }

        .btn-ok:hover {
            background-color: #2C692E;
        }

        .btn-cancel {
            background-color: #FF0000;
        }

        .btn-cancel:hover {
            background-color: #C90000;
        }

    </style>
</head>
<body>
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
            <a href="{{ url()->previous() }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-ok">Add Reminder</buttonutton>
        </div>
    </form>

</body>
</body>
</html>