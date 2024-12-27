<x-layout>
    <x-slot:title>Create Job</x-slot:title>
    <form method="POST" action="/jobs">
        @csrf
        <x-form-placeholder>Fill this field to create new job.</x-form-placeholder>
        <x-form-input name="name" type="text" placeholder="Programmer">Name</x-form-input>
        <x-form-input name="pay" type="text" placeholder="20.000">Salary</x-form-input>

        <x-form-button-group>
          <x-form-cancel href="/jobs">Cancel</x-form-cancel>
          <x-form-submit>Save</x-form-submit>
        </x-form-button-group>
      </form>
</x-layout>