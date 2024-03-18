<?php

interface NotificationService {
    public function send($to, $message);
}

class EmailService implements NotificationService {
    public function send($to, $message) {
        // Logic to send email
        echo "Email sent to $to: $message\n";
    }
}

class Notification {
    private $notificationService;

    public function __construct(NotificationService $notificationService) {
        $this->notificationService = $notificationService;
    }

    public function sendNotification($to, $message) {
        $this->notificationService->send($to, $message);
    }
}

// Usage
$emailService = new EmailService();
$notification = new Notification($emailService);
$notification->sendNotification('user@example.com', 'Hello!');
//this code follows the dependency inversion principle because the notification class is not directly dependent on the email service class


?>