@foreach($menu as $key => $value)
<div class="ml-3">
  <div class="form-row">{{ __("backend.menu.{$value['title']}") }}</div>
  <div>
    @if(isset($value['child']))
      @include('backend.roles.partials.child', [ 'menu' => $value['child'], 'actions' => $actions, 'data' => $data ])
    @else
      @foreach($actions as $action)
        <div class="custom-control custom-checkbox custom-control-inline mb-5">
            <input 
                class="custom-control-input" 
                type="checkbox" name="permissions[]" 
                id="permissions{{ $key.$value['permissions'].$action['permissions'] }}"
                value="{{ $action['permissions'].' '.$value['permissions'] }}"
                {{ isset($data) && $data->getPermissionNames()->search($action['permissions'].' '.$value['permissions']) !== false ? 'checked' : '' }}
            >
            <label class="custom-control-label" for="permissions{{ $key.$value['permissions'].$action['permissions'] }}">{{ $action["name"] }}</label>
        </div>
      @endforeach 
    @endif
  </div>
</div>  
@endforeach