FROM mediawiki:1.34

# download and install php extensions

RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# download and install mediawiki externsions

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/VisualEditor-REL1_34-74116a7.tar.gz \
    && tar -zxvf VisualEditor-REL1_34-74116a7.tar.gz \
    && rm -f VisualEditor-REL1_34-74116a7.tar.gz 

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/Babel-REL1_34-33fc3fd.tar.gz \
    && tar -zxvf Babel-REL1_34-33fc3fd.tar.gz \
    && rm -f Babel-REL1_34-33fc3fd.tar.gz 

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/cldr-REL1_34-558525a.tar.gz \
    && tar -zxvf cldr-REL1_34-558525a.tar.gz \
    && rm -f cldr-REL1_34-558525a.tar.gz 

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/CleanChanges-REL1_34-9ec9cce.tar.gz \
    && tar -zxvf CleanChanges-REL1_34-9ec9cce.tar.gz \
    && rm -f CleanChanges-REL1_34-9ec9cce.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/LocalisationUpdate-REL1_34-1eefac2.tar.gz \
    && tar -zxvf LocalisationUpdate-REL1_34-1eefac2.tar.gz \
    && rm -f LocalisationUpdate-REL1_34-1eefac2.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/Translate-REL1_34-0e726be.tar.gz \
    && tar -zxvf Translate-REL1_34-0e726be.tar.gz \
    && rm -f Translate-REL1_34-0e726be.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/UniversalLanguageSelector-REL1_34-21100eb.tar.gz \
    && tar -zxvf UniversalLanguageSelector-REL1_34-21100eb.tar.gz \
    && rm -f UniversalLanguageSelector-REL1_34-21100eb.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/Scribunto-REL1_34-f7bc2e3.tar.gz \
    && tar -zxvf Scribunto-REL1_34-f7bc2e3.tar.gz \
    && rm -f Scribunto-REL1_34-f7bc2e3.tar.gz


RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/TemplateStyles-REL1_34-c4d6f25.tar.gz \
    && tar -zxvf TemplateStyles-REL1_34-c4d6f25.tar.gz \
    && rm -f TemplateStyles-REL1_34-c4d6f25.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/Cargo-REL1_34-3aab640.tar.gz \
    && tar -zxvf Cargo-REL1_34-3aab640.tar.gz \
    && rm -f Cargo-REL1_34-3aab640.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/PageForms-REL1_34-95fc81e.tar.gz \
    && tar -zxvf PageForms-REL1_34-95fc81e.tar.gz \
    && rm -f PageForms-REL1_34-95fc81e.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/SubPageList3-REL1_34-3f1045e.tar.gz \
    && tar -zxvf SubPageList3-REL1_34-3f1045e.tar.gz \
    && rm -f SubPageList3-REL1_34-3f1045e.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/TemplateData-REL1_34-b9ccaf6.tar.gz \
    && tar -zxvf TemplateData-REL1_34-b9ccaf6.tar.gz \
    && rm -f TemplateData-REL1_34-b9ccaf6.tar.gz    

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/MagicNoCache-REL1_34-b149101.tar.gz \
    && tar -zxvf MagicNoCache-REL1_34-b149101.tar.gz \
    && rm -f MagicNoCache-REL1_34-b149101.tar.gz 

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/TextExtracts-REL1_34-17e82b0.tar.gz \
    && tar -zxvf TextExtracts-REL1_34-17e82b0.tar.gz \
    && rm -f TextExtracts-REL1_34-17e82b0.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/PageImages-REL1_34-3e3ccd8.tar.gz \
    && tar -zxvf PageImages-REL1_34-3e3ccd8.tar.gz \
    && rm -f PageImages-REL1_34-3e3ccd8.tar.gz

RUN cd /var/www/html/extensions \
    && curl -LJO https://extdist.wmflabs.org/dist/extensions/Popups-REL1_34-375d27b.tar.gz \
    && tar -zxvf Popups-REL1_34-375d27b.tar.gz \
    && rm -f Popups-REL1_34-375d27b.tar.gz


RUN cd /var/www/html/extensions \
    && git clone https://github.com/edwardspec/mediawiki-moderation.git Moderation 

ADD ./LocalSettings.php /var/www/html/LocalSettings.php