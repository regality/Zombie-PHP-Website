undead.ui
undead.ui.error(mesg)
undead.ui.warn(mesg)
undead.ui.message(mesg)
undead.ui.addMessage(title, mesg)
undead.ui.addError(level, mesg)
undead.ui.consoleAdd(html)
undead.ui.verifyForm(form)

undead.token 
undead.token.token
undead.token.set(token)
undead.token.get()
undead.token.request()

undead.stack 
undead.stack.defaultApp
undead.stack.defaultAction
undead.stack.ignoreHash
undead.stack.push(appStack, action, data)
undead.stack.pop(appStack)
undead.stack.popActive()
undead.stack.empty(appStack)
undead.stack.loadDefault()
undead.stack.focus(appStack)
undead.stack.refresh(appStack)
undead.stack.size(appStack)
undead.stack.topAction(appStack)
undead.stack.handleHashChange(hash)
undead.stack.activeName()

undead.init 
undead.init.setupAjax()
