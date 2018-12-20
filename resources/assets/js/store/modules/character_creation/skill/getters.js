const skills = state => state.skills;
const remaining_skill_points = state => state.available_skill_points.remaining_skill_points - state.available_skill_points.used_skill_points;
const remaining_skill_group_points = state => state.available_skill_points.remaining_skill_group_points - state.available_skill_points.used_skill_group_points;

const get_group_from_skill = state => id => {
    let label = '';
    for(let i=0; i < state.skills.length; i++) {
        if(state.skills[i].is_group !== 0) {
            label = find_label(state.skills[i], id, label);
        }
    }
    if (label === '') {
        label = 'label.no.group';
    }
    return label;
};

function find_label(skill, id, label) {
    let group = skill.group_skills_id.split(',');
    for(let i = 0; i < group.length; i++) {
        if (parseInt(group[i]) === id) {
            label = skill.skill_label;
        } else if (skill.id === id) {
            label = 'label.skill.group';
        }
    }
    return label;
}

function currentSkill (state, id) {
    return state.skills.find(skill => skill.id === id);
}

const filter_skills = state => payload => {
    let filter_skill = payload.skill.toLowerCase();
    let filter_group = payload.group.toLowerCase();
    let filter_lang = payload.translator;
    let skills = [];
    if(filter_skill !== '' || filter_group !== '') {
        for(let i=0; i< state.skills.length; i++) {
            let detect_duplicate = false;
            const skill_label = filter_lang(state.skills[i].skill_label).toLowerCase();
            if(filter_skill !== '' && skill_label.indexOf(filter_skill) !== -1) {
                detect_duplicate = true;
                skills.push(state.skills[i]);
            }
            if(filter_group !== '' && skill_label.indexOf(filter_group) !== -1) {
                if(!detect_duplicate)
                    skills.push(state.skills[i]);
            }
        }
        return skills.sort((a,b) => {
            if (a.is_group < b.is_group)
                return 1;
            if (a.is_group > b.is_group)
                return -1;
            return 0;
        });
    } else {
        return state.skills.sort((a,b) => {
            if (a.is_group < b.is_group)
                return 1;
            if (a.is_group > b.is_group)
                return -1;
            return 0;
        });
    }
};

export default {
    skills,
    filter_skills,
    remaining_skill_points,
    remaining_skill_group_points,
    get_group_from_skill
};
