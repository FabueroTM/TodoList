@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-2 dark:border-blue-600 dark:border-blue-700 dark:bg-white dark:text-black dark:focus:ring-blue-600 dark:focus:border-indigo-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm']) !!}>
