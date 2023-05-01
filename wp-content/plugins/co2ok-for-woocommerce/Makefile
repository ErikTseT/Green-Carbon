.PHONY: release

release:
	rsync -av --progress * /svn/ --exclude ./svn --exclude ./.git
	sed -i 's/$(OLDVERSION)/$(NEWVERSION)/g' ./svn/co2ok-plugin.php
	sed -i 's/$(OLDVERSION)/$(NEWVERSION)/g' ./svn/readme.txt
	$(MAKE) -C ./svn
