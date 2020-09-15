@php
    /**
     * @var $message \App\Models\Message
     */
@endphp

<table>
    <thead>
        <tr>
            <th>{{__('Message')}}</th>
            <th>{{__('From')}}</th>
            <th>{{__('Sent at')}}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$message->text}}</td>
            <td>{{$message->ip}}</td>
            <td>{{$message->created_at->format('Y-m-d H:i:s')}}</td>
        </tr>
    </tbody>
</table>
