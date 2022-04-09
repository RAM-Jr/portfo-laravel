<input
    {{ $attributes->class([
        '
            w-full
            rounded
            py-3
            px-[14px]
            text-body-color text-base dark:bg-slate-200
            border border-[f0f0f0]
            outline-none
            focus-visible:shadow-none
            focus:border-primary
        '
    ]) }}
>
{{ $slot }}
