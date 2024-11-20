<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignConeectsContact</title>
</head>

<body>

    <div class="Contact_sheet">

        <form class="c-form"
            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdB9AA3MBpc6JR904zcSGgx-SrOUpaU26IzSPhpmaBfD9pLUg/formResponse"
            method="POST" target="hidden_iframe" onsubmit="submitted=true;">
            <div class="c-form__item">
                <label class="c-form__label" for="field-name">お名前 <span class="c-form__required">必須</span></label>
                <?php echo $_POST['entry.1515110688']; ?>
                <input name="entry.1515110688" class="c-form__input" id="field-name" placeholder="" type="text"
                    required="required" value="<?php echo $_POST['entry.1515110688']; ?>"/>
            </div>


            <div class="c-form__item">
                <label class="c-form__label" for="field-name">メールアドレス <span class="c-form__required">必須</span></label>
                <input name="entry.323146835" class="c-form__input" id="field-name" placeholder=" sample@gmail.com"
                    type="text" required="required" />
            </div>

            <div class="c-form__item">
                <label class="c-form__label" for="field-name">ご希望納期・公開予定日</label>
                <input name="entry.1766446139" class="c-form__input" id="field-name" placeholder="" type="text"
                    required="required" />
            </div>

            <div class="c-form__item">
                <label class="c-form__label" for="field-message">ご依頼内容 <span class="c-form__required">必須</span></label>
                <textarea name="entry.427884209" class="c-form__input" id="field-message"
                    placeholder=" 簡単なご依頼内容でも問題ございません。"></textarea>
            </div>
            <script type="text/javascript">
                let submitted = false;
            </script>

            <iframe name="hidden_iframe" id="hidden_iframe" style="display: none"
                onload="if(submitted){window.location='./Thanks2.html';}"></iframe>


</body>

</html>