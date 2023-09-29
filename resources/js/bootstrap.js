import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: "http://127.0.0.1:6001",
    enabledTransports: ['ws', 'wss'],
    disableStats: true,
    forceTLS: false,
    transports: ['websocket', 'polling', 'flashsocket']
});
