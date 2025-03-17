<div>
    <div>
        <h2>Posts</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="post-{{ $post->id }}">
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->words(10) }}</td>
                    <td>
                        <button wire:click="editPost({{ $post->id }})">Edit</button>
                        <button wire:click="deletePost({{ $post->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
