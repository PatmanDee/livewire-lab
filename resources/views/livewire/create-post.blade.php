<div>
    <h2>Create Post</h2>
    <form wire:submit="createPost">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title" placeholder="Title">
            @error('title')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>
        <label>
            <span>Content</span>
            <textarea wire:model="content" placeholder="Content"></textarea>
            @error('content')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>
        <button type="submit">Create</button>
    </form>
</div>
