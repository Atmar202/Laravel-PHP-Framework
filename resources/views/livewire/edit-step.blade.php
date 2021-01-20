<div>
    <div class="flex justify-center pb-4 px-4">
    <h2 class="text-lg pb-4">Add Steps for task</h2>
    <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor pointer"></span>
    </div>
    <div class="flex justify-center py-2">
<ol class ="list-decimal">
    @foreach($steps as $key => $step)
    <li wire:key="{{empty($step['id'])?$step['wireId']:$step['id']}}" class="">
    <input type="text" name="stepNames[]" class="border rounded" placeholder="Describe Step" value="{{empty($step['name'])?"":$step['name']}}" />
    <input type="hidden" name="stepIds[]" value="{{empty($step['id'])?"":$step['id']}}">
    <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$key}})"></span>
    </li>
    @endforeach
    </ol>
    </div>
</div>
