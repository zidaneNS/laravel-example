<x-layout>
    <x-slot:title>Sign In</x-slot:title>
    <form action="/login" method="post">
        @csrf
        <x-form-placeholder>Fill this field to login</x-form-placeholder>
        <x-form-input name="email" type="email">Email</x-form-input>
        <x-form-input name="password" type="password">Password</x-form-input>

        <p>Dont have any account ?</p>
        <a href="/register" class="text-blue-600 hover:underline">Sign Up Here!</a>

        <x-form-button-group>
            <x-form-cancel href="/">Cancel</x-form-cancel>
            <x-form-submit>Sign In</x-form-submit>
        </x-form-button-group>
    </form>
</x-layout>