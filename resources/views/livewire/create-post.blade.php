<div>
    <h2>Create Post</h2>
    <form wire:submit="createPost">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title" placeholder="Title">
            <small>Words:
                <span x-text="$wire.title.split(' ').length -1"></span>
            </small>
            @error('title')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>
        <label>
            <span>Content</span>
            <textarea wire:model="content" placeholder="Content"></textarea>
            <small>Characters:
                <span x-text="$wire.content.length"></span>
            </small>
            @error('content')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>
        <button type="submit">Create</button>
    </form>
</div>
