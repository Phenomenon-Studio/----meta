/* eslint-disable max-len */
export const validator = {
    email: value => {
        // eslint-disable-next-line no-useless-escape
        return /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(
            value
        );
    },
};

export const messages = {
    required: 'This field is required.',
    email: 'Please enter a valid email address.',
};
