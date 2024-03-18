<?php


class EmailService {
    public function sendEmail($to, $subject, $message) {
        // Logic to send email
        echo "Email sent to $to: $subject - $message\n";
    }
}

class Notification {
    private $emailService;

    public function __construct() {
        $this->emailService = new EmailService();
    }

    public function sendNotification($to, $message) {
        $this->emailService->sendEmail($to, 'Notification', $message);
    }
}

// Usage
$notification = new Notification();
$notification->sendNotification('user@example.com', 'Hello!');

//this code violates the dependency inversion principle because the notification class is directly dependent on the email service class











?>