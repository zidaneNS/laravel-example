<x-layout>
    <x-slot:title>Register</x-slot:title>
    <form action="/register" method="post">
        @csrf
        <x-form-placeholder>Fill this field to register</x-form-placeholder>
        <x-form-input name="name" type="text">Name</x-form-input>
        <x-form-input name="email" type="email">Email</x-form-input>
        <x-form-input name="password" type="password">Password</x-form-input>
        <x-form-input name="password_confirmation" type="password">Confirm Password</x-form-input>

        <x-form-button-group>
            <x-form-cancel href="/">Cancel</x-form-cancel>
            <x-form-submit>Sign Up</x-form-submit>
        </x-form-button-group>
    </form>
</x-layout>