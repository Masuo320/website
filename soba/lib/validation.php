<?php
class Validation
{
    public function validateContact(
        $name,
        $kana,
        $municipalities,
        $address,
        $email,
        $confirm_email,
        $message
    )
    {
        $error = [];
        if ($name === '' || preg_match('/^(\s|　)+$/u', $name)) {
            $error['name'] = 'お名前を入力してください';
        }
        if ($kana === '' || preg_match('/^(\s|　)+$/u', $kana)) {
            $error['kana'] = 'フリガナを入力してください';
        } elseif (!preg_match('/^[ァ-ヴー]+$/u', $kana)) {
            $error['kana'] = 'フリガナを全角カタカナで入力してください';
        }
        if ($municipalities === '' || preg_match('/^(\s|　)+$/u', $municipalities)) {
            $error['municipalities'] = '市区町村を入力してください';
        }
        if ($address === '' || preg_match('/^(\s|　)+$/u', $address)) {
            $error['address'] = '番地を入力してください';
        }
        if ($email === '' || preg_match('/^(\s|　)+$/u', $email)) {
            $error['email'] = 'メールアドレスを入力してください';
        }
        if ($confirm_email === '' || preg_match('/^(\s|　)+$/u', $confirm_email)) {
            $error['confirm_email'] = '確認用メールアドレスを入力してください';
        } elseif ($email !== $confirm_email) {
            $error['confirm_email'] = '確認用メールアドレスがメールアドレスと一致していません';
        }
        if ($message === '' || preg_match('/^(\s|　)+$/u', $message)) {
            $error['message'] = 'お問い合わせ内容を入力してください';
        } elseif (mb_strlen($message) < 20) {
            $error['message'] = 'お問い合わせ内容を20文字以上で入力してください';
        }
        return $error;
    }
}
