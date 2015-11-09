# twilio-sms-forwarder
Twilio の電話番号に届いた SMS を設定されたメールアドレスに転送します

## 設置方法
1. forward.php を開いて設定を変更します。
2. Twilio からアクセス可能な、PHP スクリプトが動作するサーバーに設置します。
3. Twilio の電話番号の確認画面から、メッセージ受診時の Request URL に「2」で設置したスクリプトの URL を指定します。
