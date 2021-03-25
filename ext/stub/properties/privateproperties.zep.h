
extern zend_class_entry *stub_properties_privateproperties_ce;

ZEPHIR_INIT_CLASS(Stub_Properties_PrivateProperties);

PHP_METHOD(Stub_Properties_PrivateProperties, getSomeNull);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeNullInitial);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeFalse);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeTrue);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeInteger);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeDouble);
PHP_METHOD(Stub_Properties_PrivateProperties, getSomeString);

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomenull, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomenullinitial, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomefalse, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsometrue, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomeinteger, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomedouble, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_stub_properties_privateproperties_getsomestring, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(stub_properties_privateproperties_method_entry) {
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeNull, arginfo_stub_properties_privateproperties_getsomenull, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeNull, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeNullInitial, arginfo_stub_properties_privateproperties_getsomenullinitial, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeNullInitial, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeFalse, arginfo_stub_properties_privateproperties_getsomefalse, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeFalse, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeTrue, arginfo_stub_properties_privateproperties_getsometrue, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeTrue, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeInteger, arginfo_stub_properties_privateproperties_getsomeinteger, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeInteger, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeDouble, arginfo_stub_properties_privateproperties_getsomedouble, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeDouble, NULL, ZEND_ACC_PUBLIC)
#endif
#if PHP_VERSION_ID >= 80000
	PHP_ME(Stub_Properties_PrivateProperties, getSomeString, arginfo_stub_properties_privateproperties_getsomestring, ZEND_ACC_PUBLIC)
#else
	PHP_ME(Stub_Properties_PrivateProperties, getSomeString, NULL, ZEND_ACC_PUBLIC)
#endif
	PHP_FE_END
};