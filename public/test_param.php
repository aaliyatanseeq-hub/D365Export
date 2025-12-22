<?php

// Read parameter from URL
$quotationId = $_GET['quotationId'] ?? 'NO_ID_RECEIVED';

// Return a simple message
echo "Received quotationId: " . htmlspecialchars($quotationId);
