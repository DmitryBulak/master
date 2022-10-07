import NOTES from '../notes/note'
export default (note) => {
    return NOTES.includes(note) && note.includes('#')
}