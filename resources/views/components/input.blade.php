@props('type', 'name', 'id', 'placeholder')

<input
  type="${{props['type']}}"
  name="{{props['name']}}"
  id="{{props['id']}}"
  placeholder="{{props['placeholder']}}"
  class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[33px] px-[20px]"
>