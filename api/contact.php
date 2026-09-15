<?php
/**
 * ARTÉVA LUXURY FURNITURE — BESPOKE INQUIRY & CONTACT HANDLER API
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $interest = filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$fullName || !$email || !$message) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Please provide your name, valid email address, and project requirements.'
        ]);
        exit;
    }

    // In a live production environment, this sends an email or logs to CRM database
    // Here we return a successful response with concierge confirmation
    echo json_encode([
        'status' => 'success',
        'message' => "Thank you {$fullName}. Your inquiry regarding {$interest} has been delivered to the Artéva Design Studio. Our Senior Concierge will respond within 24 business hours.",
        'inquiry_id' => 'ART-' . strtoupper(substr(md5(time()), 0, 8))
    ]);
    exit;
}

http_response_code(405);
echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
