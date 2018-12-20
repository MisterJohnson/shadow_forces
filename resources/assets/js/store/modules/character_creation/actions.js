import metatype_actions from "./metatype/actions"
import attribute_actions from "./attributes/actions"
import priority_actions from "./priority/actions"
import magic_actions from "./magic/actions"

export default {
    METATYPE_UPDATE_DATA: metatype_actions.updateData,
    ATTRIBUTE_UPDATE_DATA: attribute_actions.updateData,
    PRIORITY_UPDATE_PRIORITIES: priority_actions.updatePriorities,
};
