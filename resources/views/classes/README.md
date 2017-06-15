classes_default.blade.php
classes_test.blade.php
=====

Created and designed by Yamashita Keisuke(2016/12/3)

Overview
##Description
チャンネル内のチャット、ライブストリーミングを実装するためのPHPファイル。
`default`には共有するコード、`test`にはそれぞれの個別コードが書いてある。
##VS.
チャンネルに必要なものを実装する。チャット、ライブストリーミングをまず優先的に行う。
そのときにindex.blade.appから共通コードである**ナビゲーションバー**を`yield`で持ってくる。
ほとんどどの講義も共通であることが多いため、`classes_default.blade.app`で共通部分を書いてある。
##Requirement
・Laravel5.0
・Bootstrap3
##Usage
##Install
##Contribution
##Licence
[MIT](https://github.com/tcnksm/tool/blob/master/LICENCE)
