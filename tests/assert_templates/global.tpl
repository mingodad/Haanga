{% exec set_global_template %}
{{ test_global.b }} {{global1.foo.foo.bar}} {{global1.bar.xxx.yyyy|default:"yyy"}}