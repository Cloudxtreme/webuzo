import os

os.environ['TRAC_ENV_PARENT_DIR'] = '[[softpath]]'
os.environ['PYTHON_EGG_CACHE'] = '[[tracdir]]/eggs'

import trac.web.main
application = trac.web.main.dispatch_request